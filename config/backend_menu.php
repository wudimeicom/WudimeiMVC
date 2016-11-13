<?php
 

Menu::prefix( config('app.backend_url')  );

// Menu::item( menuId, url_without_prefix , text, icon_class );

Menu::item('dashboard', '' , 'backend.Dashboard','fa-dashboard');
Menu::item('user', '#','user.Users','fa-user',function(){
	Menu::item('userList', '/users','user.User List','fa-user');
	Menu::item('addUser', '/user-add','add user','fa-plus');
	Menu::item('userGroup', '/user-groups','groups','fa-group', function(){
		Menu::item('addGroup', '/group-add','add group','fa-group');
	});
});
Menu::item('setting', '/setting','setting.setting','fa-cog');
		

return Menu::getMenus();