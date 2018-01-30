var StaticElController = function (config) {
    Ext.onReady(function () {
        var nameInput = Ext.get(config.nameInput);
        var staticFile = Ext.getCmp(config.staticFile);
        var sourceInput = Ext.getCmp(config.sourceInput);
        var isStatic = Ext.getCmp(config.isStatic);
        var categoryInput = Ext.getCmp(config.categoryInput);

        if (Ext.get(config.contentInput)) {
            Ext.DomHelper.append(config.contentInput, {
                tag: 'div',
                cls: 'content-lock',
                id: 'modx-content-lock',
                children: [
                    { tag: 'div', html: 'Version Controlled Elements are locked for editing.' },
                ]
            });
        }

        if (!(nameInput && staticFile && sourceInput)) {
            return;
        }

        if (MODx.config['static_el_controller.static_by_default'] == 1) {
            isStatic.setValue(true);
        }

        var processContentLock = function () {
            var contentLock = Ext.get('modx-content-lock');
            if (contentLock) {
                isStatic.getValue() ?
                    contentLock.addClass('-active') :
                    contentLock.removeClass('-active');
            }
        }

        var setValue = function (placeholder, value) {
            var new_value = config.basePath + (config.basePath[config.basePath.length - 1] === '/' ? '' : '/') + config.type + 's/';

            if (MODx.config['static_el_controller.include_id'] == '1') {
                new_value += MODx.request.id + '-';
            }

            new_value += value + '.' + (MODx.config[config.fileExt] || 'php');

            placeholder.setValue(new_value);
        }

        var getRequest = function () {
            processContentLock();

            var catval = categoryInput.getValue();
            Ext.Ajax.request({
                url: MODx.config['assets_url'] + 'components/static_el_controller/connector.php',
                success: function (e) {
                    var response = JSON.parse(e.responseText);
                    var value = response.result;
                    if (MODx.config['static_el_controller.enable_rewrite'] || value == '1') {
                        setValue(staticFile, nameInput.getAttribute('value'));
                    }
                    var category;
                    var category_folder = "";
                    if (catval != "") {
                        category = response.category;
                        category_folder = category.toLowerCase().replace(/ /g, "_") + "/";
                    }
                    if (MODx.config['static_el_controller.include_category'] == "1") {
                        setValue(staticFile, category_folder + nameInput.getAttribute('value'));
                    }
                },
                params: {
                    action: 'check',
                    type: config.type,
                    id: MODx.request.id,
                    source: sourceInput.getValue(),
                    category: categoryInput.getValue(),
                    static_file: staticFile.getValue()
                }
            });
        }

        if (staticFile.getValue() == '') {
            setValue(staticFile, nameInput.getAttribute('value'));
        } else {
            getRequest();
        }

        if (sourceInput.getValue() != config.source) {
            var sourceStore = sourceInput.getStore();
            var sources = [];
            sourceStore.load({
                callback: function (r) {
                    Ext.each(r, function (item, index) {
                        sources.push(item.data.id);
                        if (item.data.id == config.source) {
                            sourceInput.setValue(config.source);
                            return false;
                        }
                        return true;
                    });
                }
            });
        }


        nameInput.on('keyup', function () {
            getRequest();
        });
        categoryInput.on('select', function () {
            getRequest();
        });
        isStatic.on('check', function (e) {
            getRequest();
        })
    });
};
