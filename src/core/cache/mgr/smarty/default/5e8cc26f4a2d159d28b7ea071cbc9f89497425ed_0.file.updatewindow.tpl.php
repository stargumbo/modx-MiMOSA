<?php /* Smarty version 3.1.27, created on 2017-03-14 14:21:37
         compiled from "/var/www/core/components/migx/templates/mgr/updatewindow.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:115147716358c7fc71e6b132_42443071%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e8cc26f4a2d159d28b7ea071cbc9f89497425ed' => 
    array (
      0 => '/var/www/core/components/migx/templates/mgr/updatewindow.tpl',
      1 => 1489501234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115147716358c7fc71e6b132_42443071',
  'variables' => 
  array (
    'update_win_title' => 0,
    'win_id' => 0,
    'customconfigs' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58c7fc71e876e5_42234304',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58c7fc71e876e5_42234304')) {
function content_58c7fc71e876e5_42234304 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '115147716358c7fc71e6b132_42443071';
?>


MODx.window.UpdateTvdbItem = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        title:'<?php echo $_smarty_tpl->tpl_vars['update_win_title']->value;?>
'
        ,id: 'modx-window-mi-grid-update-<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
'
        ,width: '1000'
		,closeAction: 'hide'
        ,shadow: false
        ,resizable: true
        ,collapsible: true
        ,maximizable: true
        ,allowDrop: true
        ,height: '600'
        //,saveBtnText: _('done')
        ,forceLayout: true
        ,autoScroll: true
        <?php echo $_smarty_tpl->tpl_vars['customconfigs']->value['winbuttons'];?>

        ,record: {}
		,grid: null
        ,action: 'u'
		,record_json: ''
        /*
        ,keys: [{
            key: Ext.EventObject.ENTER
            ,fn: this.submit
            ,scope: this
        }]
        */		
        ,fields: []
    });
    MODx.window.UpdateTvdbItem.superclass.constructor.call(this,config);
    this.options = config;
    this.config = config;

    //this.on('show',this.onShow,this);
    this.on('hide',this.onHideWindow,this);
    this.addEvents({
        success: true
        ,failure: true
        ,beforeSubmit: true
		,hide:true
		//,show:true
    });
    this._loadForm();	
};
Ext.extend(MODx.window.UpdateTvdbItem,Ext.Window,{
    cancel: function(){

        this.hide();
    },         
    onHideWindow: function(){
   
        var v = this.fp.getForm().getValues();
        var fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);
        var field = null;
        if (fields.length>0){
            for (var i = 0; i < fields.length; i++) {
                tvid = (fields[i].tv_id);
                field = Ext.get('tv'+tvid);
                if (field && typeof(field.onHide) != 'undefined'){
                    field.onHide();
                }                  
            }
        }
        this.destroy();
    }
    <?php echo $_smarty_tpl->tpl_vars['customconfigs']->value['winfunctions'];?>

    ,getFormValues: function(){
        var v = this.fp.getForm().getValues();
        var fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);
        var item = {};
        var tvid = ''; 
        //we run onBeforeSubmit on each field, if this function exists. For example for richtext-fields.       
        if (fields.length>0){
            for (var i = 0; i < fields.length; i++) {
                tvid = (fields[i].tv_id);
                field = Ext.get('tv'+tvid);
                if (field && typeof(field.onBeforeSubmit) != 'undefined'){
                    field.onBeforeSubmit();
                }                         
            }
        }	
        v = this.fp.getForm().getValues();
        fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);

        if (fields.length>0){
            for (var i = 0; i < fields.length; i++) {
                tvid = (fields[i].tv_id);
                if (v['tv'+tvid+'_prefix']) v['tv'+tvid]=v['tv'+tvid+'_prefix']+v['tv'+tvid];//url-TV support
                item[fields[i].field]=v['tv'+tvid+'[]'] || v['tv'+tvid] || '';	
            }
            //we store the item.values to rec.json because perhaps sometimes we can have different fields for each record
        } 
        return item        
    }
    ,submit: function() {
        var object_id = this.baseParams.object_id;
        
        if (this.action == 'd'){
            MODx.fireResourceFormChange();
            object_id = 'new';     
        }
        if (this.action == 'u'){
            /*update record*/
        }else{
            /*append record*/
        }        
        
        if (this.fp.getForm().isValid()) {
			var item = this.getFormValues();		
            //console.log(this.config);
            MODx.Ajax.request({
                url: this.grid.url
                ,params: {
                    action: 'mgr/migxdb/update'
                    ,data: Ext.util.JSON.encode(item)
				    ,configs: this.grid.configs
                    ,resource_id: this.grid.resource_id
                    ,co_id: this.grid.co_id
                    ,object_id: object_id
                    ,tv_id: this.baseParams.tv_id
                    ,wctx: this.baseParams.wctx
                }
                ,listeners: {
                    'success': {fn:this.onSubmitSuccess,scope:this}
                }
            });
            return true;
        }
        return false;
    },
    onSubmitSuccess: function(){
            this.grid.refresh();
            //this.grid.collectItems();
            //this.onDirty();
            this.fp.getForm().reset();
            this.hide();
            return true;
    },
    _loadForm: function() {
        //if (this.checkIfLoaded(this.config.record || null)) { return false; }
        var params = this.config.baseParams || { action: this.config.action || ''};
        //params.input_prefix = Ext.id(null,'inp_');
        
        this.fp = this.createForm({
            url: this.config.url
            ,baseParams: params 
            //,items: this.config.fields || []
        });
		//console.log('renderForm');
        this.add(this.fp);
    }	
    ,createForm: function(config){
        config = config || {};
        Ext.applyIf(config,{
            labelAlign: this.config.labelAlign || 'right'
            ,labelWidth: this.config.labelWidth || 100
            ,frame: this.config.formFrame || true
            ,popwindow : this
			,border: false
            ,bodyBorder: false
            ,errorReader: MODx.util.JSONReader
            ,url: this.config.url
            ,baseParams: this.config.baseParams || {}
            ,fileUpload: this.config.fileUpload || false
        });
        return new MODx.panel.MidbGridUpdate<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
(config);
    }
    ,switchForm: function() {
        var v = this.fp.getForm().getValues();
        //console.log(v);
        var fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);
        var item = {};
        var tvs = {};        
        var tvid = '';
        var field;
        if (fields.length>0){
            for (var i = 0; i < fields.length; i++) {
                tvid = (fields[i].tv_id);
                field = Ext.get('tv'+tvid);
                if (field && typeof(field.onBeforeSubmit) != 'undefined'){
                    field.onBeforeSubmit();
                }                         
            }
        }	        
        v = this.fp.getForm().getValues();
        fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);            
        if (fields.length>0){
            for (var i = 0; i < fields.length; i++) {
                tvid = (fields[i].tv_id);
                tvs['tv'+tvid] = true;
                item[fields[i].field]=v['tv'+tvid+'[]'] || v['tv'+tvid] || '';
                  
                if (field && typeof(field.onHide) != 'undefined'){
                    field.onHide();
                }                   							
            }
        }

        //console.log(item);			        
        this.fp.autoLoad.params.record_json=Ext.util.JSON.encode(item);
        this.fp.autoLoad.params.loadaction='switchForm';
        this.fp.doAutoLoad();        
    }
    
    ,onShow: function() {
        //console.log('onshow');
        if (this.fp.isloading) return;
        this.fp.isloading=true;
        this.fp.autoLoad.params.record_json=this.baseParams.record_json;
        this.fp.doAutoLoad();
    }

});
Ext.reg('modx-window-tv-dbitem-update-<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
',MODx.window.UpdateTvdbItem);

MODx.panel.MidbGridUpdate<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
 = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'migxdb-panel-object-<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
'
		,title: ''
        ,url: config.url
        ,baseParams: config.baseParams	
        ,class_key: ''
        ,bodyStyle: 'padding: 15px;'
        ,layout: 'anchor'
        ,width:'98%'
        , height:'98%'            
        ,anchorSize: {width:'98%', height:'98%'}
        ,autoLoad: this.autoload(config)
        ,listeners: {
            //'beforeSubmit': {fn:this.beforeSubmit,scope:this},
            //'success': {fn:this.success,scope:this}
			'load': {fn:this.load,scope:this}
        }		
    });
 	MODx.panel.MidbGridUpdate<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
.superclass.constructor.call(this,config);
	
	//this.addEvents({ load: true });
};
Ext.extend(MODx.panel.MidbGridUpdate<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
,MODx.FormPanel,{
    autoload: function(config) {
		this.isloading=true;
        var self = this; 
        
		return a = {
            url: '<?php echo $_smarty_tpl->tpl_vars['config']->value['connectorUrl'];?>
'
            //url: config.url
			,method: 'POST'
            ,params: config.baseParams
            ,scripts: true
            ,callback: function() {
				self.isloading=false;
				self.isloaded=true;
				self.fireEvent('load');
                //MODx.fireEvent('ready');
            }
            ,scope: this
        };
  	
    },scope: this
    
    ,
    setup: function() {

    }
    ,beforeSubmit: function(o) {
        //tinyMCE.triggerSave(); 
    }
	 ,load: function() {
		//MODx.loadRTE();
        
        var v = this.getForm().getValues();
        //console.log(v);
        var fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);
        var item = {};
        var tvs = {};        
        var tvid = '';
        var field = null;
        if (fields.length>0){
            for (var i = 0; i < fields.length; i++) {
                
                tvid = (fields[i].tv_id);
                field = Ext.get('tv'+tvid);
                if (field && typeof(field.onLoad) != 'undefined'){
                    field.onLoad();
                }                
			
            }
        }            

        //this.popwindow.width='1000px';
		//this.width='1000px';
		//this.syncSize();
		//this.popwindow.syncSize();
		return '';
	 }
});
Ext.reg('migxdb-panel-object',MODx.panel.MidbGridUpdate<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
);

<?php }
}
?>