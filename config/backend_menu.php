<?php
 

Menu::prefix( config('app.backend_url')  );

// Menu::item( menuId, url_without_prefix , text, icon_class );

Menu::item('dashboard', '' , 'backend.Dashboard','fa-dashboard');
Menu::item('user', '#','user.Users','fa-user',function(){
	Menu::item('userList', '/users','user.User List','fa-user');
	
	Menu::item('userGroup', '/user-groups','user_group._name','fa-group');
	Menu::item('permissions', '/permissions','permission._name','fa-key');
});
Menu::item('setting', '/setting','setting.setting','fa-cog');
		

return Menu::getMenus();