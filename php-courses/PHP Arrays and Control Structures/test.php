<?php

$messageBody = 'You do not have access to this page. Please contact your administrator.';

//Available roles: admin, editor, author, subscriber
if (!isset($role)) {
    $role = 'subscriber';
} 
  
switch ( $role ) {
	case "admin":
    	$messageBody = 'As an admin, you can add, edit, or delete any post.';
		break;

	case "editor":
		$messageBody = 'As an editor, you can add or edit any post, and delete your own posts.';
		break;

	case "author":
		$messageBody = 'As an author, you can add, edit, or delete your own post.';
		break;

	default:
   		$messageBody;
    	break;
}
echo $messageBody;
