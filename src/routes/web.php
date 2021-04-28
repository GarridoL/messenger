<?php

// Messenger Groups
$route = env('PACKAGE_ROUTE', '').'/messenger_groups/';
$controller = 'Increment\Messenger\Http\MessengerGroupController@';
Route::post($route.'create', $controller."create");
Route::post($route.'create_group_with_members', $controller."createGroupWithMembers");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'create_new_issue', $controller."createNewIssue");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'retrieve_by_member', $controller."retrieveByMember");
Route::post($route.'retrieve_summary', $controller."retrieveSummary");
Route::post($route.'retrieve_summary_payhiram', $controller."retrieveSummaryPayhiram");
Route::post($route.'retrieve_my_issue', $controller."retrieveMyIssue");
Route::post($route.'update_title', $controller."updateTitle");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");

// Messenger Members
$route = env('PACKAGE_ROUTE', '').'/messenger_members/';
$controller = 'Increment\Messenger\Http\MessengerMemberController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'retrieve_members', $controller."retrieveMembers");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");

// Messenger Messages
$route = env('PACKAGE_ROUTE', '').'/messenger_messages/';
$controller = 'Increment\Messenger\Http\MessengerMessageController@';
Route::post($route.'create', $controller."create");
Route::post($route.'create_less_return', $controller."createLessReturn");
Route::post($route.'create_with_images', $controller."createWithImages");
Route::post($route.'create_with_image_without_payload', $controller."createWithImageWithoutPayload");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'update_by_status', $controller."updateByStatus");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");

// Messenger Message Files
$route = env('PACKAGE_ROUTE', '').'/messenger_message_files/';
$controller = 'Increment\Messenger\Http\MessengerMessageFileController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");

// Messenger Message Files
$route = env('PACKAGE_ROUTE', '').'/audio_calls/';
$controller = 'Increment\Messenger\Http\AudioCallController@';
Route::post($route.'send', $controller."send");

