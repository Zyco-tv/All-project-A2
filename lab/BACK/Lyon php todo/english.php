<?php
function lang($txt){
    static $lang = array(
    // home page
    'html_dir' => 'ltr',
    'homeLinks' => 'gauche',
    'sponsored_align' => 'gauche',
    'main' => 'Principale',
    'my_photos' => 'Mes photos',
    'my_posts' => 'Mes publication',
    'settings' => 'Paramettre',
    'my_notepad' => 'Mon bloc-notes',
    'new_note' => 'Nouvelle note',
    'see_all_notes' => 'Voir toutes les notes',
    'more' => 'Plus',
    'advertisement' => 'Advertisement',
    'followers' => 'Followers',
    'following' => 'Following',
    'saved_posts' => 'Sauvegardés le post',
    'sponsored' => 'Sponsorisé',
    'w_post_li' => 'gauche',
    'w_post_li2' => 'droite',
    'w_post_align' => 'gauche',
    'w_post_dir' => 'ltr',
    'post_textbox_placeholder' => 'Partagez, publiez vos idées avec notre communauté',
    'post_textbox_align' => 'gauche',
    'post_now' => 'Publier maintenant',
    'w_title_inputText' => 'Ecrivez un titre à votre message (facultatif)',
    'post_align' => 'gauche',
    'post_span_float' => 'droite',
    'post_options' => 'droite',
    'post_content_align' => 'gauche',
    'comment_field_align' => 'gauche',
    'comment_field_ph' => 'Écrire un commentaire ...',
    'comment' => 'Commenter',
    'u_liked_this' => 'tu as like sa',
    'liked' => 'Like',
    'share_now' => 'Partager',
    'comment_time_align' => 'gauche',
    'comments' => 'comments',
    'no_comments' => 'No comments',
    'likes' => 'Likes',
    'no_likes' => 'Be the first',
    'like' => 'Like',
    'just_now' => 'Just now',
    'minute_ago' => 'minute',
    'minutes_ago' => 'minutes',
    'hour_ago' => 'hour',
    'hours_ago' => 'hours',
    'day_ago' => 'day',
    'days_ago' => 'days',
    'week_ago' => 'week',
    'weeks_ago' => 'weeks',
    'month_ago' => 'month',
    'months_ago' => 'months',
    'year_ago' => 'year',
    'years_ago' => 'years',
    'HLP_b' => 'homelinksP_borderL',
    'user_info_align' => 'gauche',
    'comment_field_align' => 'gauche',
    'edit_profile' => 'Edit profile',
    'posts_str' => 'Posts',
    'followers_str' => 'Followers',
    'following_str' => 'Following',
    'uProf_ffTitle_align' => 'gauche',
    'uProf_followersTitle' => 'followers',
    'uProf_urfollowersTitle' => 'Your followers',
    'uProf_followersTitleCheck' => 'en',
    'uProf_followingTitle' => 'following',
    'uProf_urfollowingTitle' => 'People who you are following',
    'uProf_followingTitleHe' => 'he ',
    'uProf_followingTitleShe' => 'she ',
    'uProf_followingTitle1' => 'People that',
    'uProf_followingTitle2' => 'are following',
    'followingBtn_str' => 'Following',
    'followBtn_str' => 'Follow',
    'postDropdown' => 'dropdown-menu-droite',
    'postDropdownTxtAlign' => 'gauche',
    'EditPost_DDM' => 'Edit post',
    'DeletePost_DDM' => 'Delete post',
    'reportPost_DDM' => 'Report post',
    'savePost_DDM' => 'Save post',
    'p_title_male' => ' updated his profile picture',
    'p_title_famale' => ' updated her profile picture',
    'pc_title_male' => ' updated his cover picture',
    'pc_title_famale' => ' updated her cover picture',
    'not_specified' => 'Not specified',
    'verified_page' => 'Verified page',
    'my_photos' => 'My photos',
    'my_photos_align' => 'gauche',
    'all_postsSTR' => 'all posts',
    'all_postsSTR_align' => 'gauche',
    'nothingToShow' => 'Nothing to show',
    'working' => 'Working',
    'at' => 'at',
    'lives_in' => 'Lives in',
    'born_on' => 'Born on',
    'studies' => 'Studies',
    'about' => 'About',
    'bio' => 'Bio',
    'onlyUcanCThis' => 'Only you can see this',
    'save' => 'Save',
    'cancel' => 'Cancel',
    'uploadPhoto' => 'Uplaod',
    'addToFavoritePages' => 'Add to favorite pages',
    'unFavoritePage' => 'Unfavorite page',
    'report' => 'Report',
    'textAlign' => 'gauche',
    'errorPost_n1' => 'This post should not to be less than 15 characters.',
    'errorPost_n2' => 'Please select an image and then try again!',
    'errorPost_n3' => 'Your image must be less than 4MB of size.',
    'errorPost_n4' => 'Your image was not jpeg, jpg, or png file.',
    'errorPost_n5' => 'An error occured while processing the image. Try again.',
    'errorPost_n6' => 'ERROR: photo not uploaded. Try again.',
    'supportBox' => 'Support box',
    'seeAll' => 'See all',
    'language' => 'Language',
    'float' => 'gauche',
    'float2' => 'droite',
    'ul_navbar_nav1' => 'nav navbar-nav',
    'ul_navbar_nav2' => 'nav navbar-nav navbar-droite',
    'navbar_home' => 'Home',
    'notifications' => 'Notifications',
    'messages' => 'Messages',
    'navbar_uMenu_UserProfile' => 'User profile',
    'adminOptions' => 'Admin options',
    'dashboard' => 'Dashboard',
    'terms' => 'Terms',
    'privacyPolicy' => 'Privacy policy',
    'Report_A_Problem' => 'Report a problem',
    'logout' => 'Logout',
    'navbar_serchBox_ph' => 'Search..',
    'trending_worldWide' => 'Trending - WorldWide',
    'posts' => 'Posts',
    'pages' => 'Pages',
    'reactions' => 'reactions',
    'by' => 'By',
    'please_wait' => 'Please wait...',
    'favourite_pages' => 'Favourite pages',
    'wpr_public' => 'Public',
    'wpr_followers' => 'Followers',
    'wpr_onlyme' => 'Only me',
    'user_photos' => 'Photos',
    'stars_str' => 'Stars',
    'share' => 'share',
    'shares' => 'shares',
    'no_shares' => 'no shares',
    'wpost_write' => 'Write..',
    'wpost_upPhoto' => 'Photo',
    'wpost_title' => 'Title',
    'shared_a_Post' => 'Shared a post',
    'comm_edited' => 'Edited',
    'comm_edit' => 'Edit comment',
    'comm_delete' => 'Delete comment',
    'comm_report' => 'Report comment',
    'recently_starts_from' => 'Recently starts from :',
    'load_more' => 'Load more',
    'postSaved' => 'Post Saved',
    'postSavedBefore' => 'You saved this post before!',
    'errorSomthingWrong' => 'Error, An error occurred! Please try again later.',
    'postShared' => 'Post shared on your timeline.',
    'newLine_Shift_enter' => 'New line &xrarr;',
    'totalPhotos' => 'Total photos',
    //   HASSEN
    'see_all' => 'See all',
    'likeNotify_str' => 'liked your post',
    'commmentNotify_str' => 'commented on your post',
    'shareNotify_str' => 'shared your post',
    'starNotify_str' => 'You got new star from',
    'followNotify_str' => 'starting folowing you',
    'no_notifications' => 'No notifications',
    'accountSetup' => 'Account setup',
    'complete' => 'Complete',
    'as_followPeople' => 'Follow people',
    'as_profileInfo' => 'Profile info',
    'as_coverPhoto' => 'Cover photo',
    'as_userPhoto' => 'User photo',
    'noMoreStories' => 'No more stories',
    'you_have_not_posted_anything_yet' => 'You have not posted anything yet',
    'has_not_posted_anything_yet' => 'has not posted anything yet',
    'not_found' => 'Not found',
    'no_users_like_the_name_you_entered' => 'No users like the name you entered',
    'publicPosts' => 'Public posts',
    'searchMoreAbout' => 'Search more about',
    'advancedSearch' => 'Advanced search',
    'profilePageNotFound_str1' => 'Sorry, This page isn\'t available',
    'profilePageNotFound_str2' => 'Sorry this page may have been removed, or that page doesn\'t exist!',
    'profilePageNotFound_str3' => 'Go back to the previous page',
    'posting' => 'Posting..',
    'hashtag_not_available' => 'Hashtag not available!',
    'news' => 'News',
    'tv' => 'Tv',
    'store' => 'Store',
    'new' => 'New',
    'job' => 'Job',
    'all_posts_that_you_saved' => 'All posts that you saved',
    'nothing_saved_yet' => 'Nothing saved yet',
    'do_you_want_to_delete_this' => 'Do you want to delete this?',
    'you_can_not_undo_this_after_deleting_it' => 'You can not undo this after deleting it',
    'delete' => 'Delete',
    'open' => 'open',
    'closed' => 'closed',
    'you_anonymously_reported_a' => 'You anonymously reported a',
    'post' => 'post',
    'click_to_view_your_report' => 'Click to view your report',
    'replay' => 'Replay',
    'your_report' => 'Your report',
    'help_us_to_make_our_community_better' => 'Help us to make our community better',
    'submit' => 'submit',
    'subject' => 'Subject',
    'your_feedback_helps_us_improve_our_community' => 'Your feedback helps us improve our community',
    'post_reported' => 'Post reported! we will review your report soon',
    'mynotepad_main_title' => 'Save your secret password, codes, notes, links and everything online .. just you can view or edit it',
    'newNote_p' => 'Create new secret note, Only you can see and edit it',
    'newNote_title' => 'Note title',
    'newNote_content' => 'Note content',
    'create' => 'create',
    'saved' => 'Saved',
    'current_password_is_incorrect' => 'Current password is incorrect',
    'please_fill_required_fields' => 'Please fill required fields',
    'new_password_doesnt_match_the_confirm_field' => 'New password field doesn\'t match the confirm field',
    'changes_saved_seccessfully' => 'changes saved seccessfully',
    'remove_account' => 'Remove account',
    'general' => 'General',
    'male' => 'Male',
    'female' => 'Female',
    'fullname' => 'Full name',
    'username' => 'Username',
    'email' => 'Email Address',
    'required' => 'Required',
    'new_password' => 'New password',
    'confirm_new_password' => 'Confirm new password',
    'gender' => 'Gender',
    'current_password' => 'Current password',
    'save_changes' => 'Save changes',
    'education' => 'Education',
    'work' => 'Work',
    'work_title' => 'Work title',
    'work_place' => 'Work place',
    'at' => 'at',
    'country' => 'Country',
    'birthday' => 'Birthday',
    'website' => 'Website',
    'bio' => 'Bio',
    'profile_pic_shape' => 'Profile picture shape',
    'circle' => 'Circle',
    'square' => 'Square',
    'remove_account' => 'Remove account',
    'remove_account_note' => 'You can\'t undo this action and all data can not be recovered when you press <b>Remove account</b> button',
    'loadmore' => 'Load more',
    'users' => 'Users',
    'males' => 'Males',
    'females' => 'Females',
    'completed_profiles' => 'Completed profiles',
    'stars' => 'Stars',
    'notes' => 'Notes',
    'verified_users' => 'Verified users',
    'admins' => 'Admins',
    'verify_badge' => 'Verify badge',
    'verify_user' => 'Verify user',
    'remove_verifyBadge' => 'Remove verify badge',
    'edit_delete_dashboard' => 'Edit / Delete',
    'verify_badge_removed_succ_from' => 'Verify badge removed successfully from',
    'verified_successfully' => 'Verified successfully',
    'user_doesnt_exist' => 'This user doesn\'t exist!',
    'yes' => 'Yes',
    'no' => 'No',
    'upgradeToAdmin' => 'Upgrade to admin',
    'password' => 'Password',
    'username_allowed_error' => 'Special characters or white spaces are not allowed,Just "_","." is allowed between words in username',
    'user_already_exist' => 'Username is already exist!',
    'uCannot_access_admin_data' => 'You can not edit, delete or access main admin data!',
    'uCan_access_your_data_from_settings' => 'You are the main admin of this platform, you can access,edit or delete your data from settings',
    'from' => 'From',
    'time' => 'Time',
    'options' => 'Options',
    'report_about_post' => 'Reported about post',
    'dir' => 'ltr',
    'dir2' => 'rtl',
    'activeNow' => 'Active now',
    'notActiveNow' => 'Not Active',
    'selectToChat' => 'Please select a chat to start messaging',
    'user_profile' => 'User profile',
    'emptyChat' => 'You have no messages in this chat .. say hello to start chatting now',
    'you' => 'You',
    'write_a_message' => 'Write a message..',
    'search' => 'Search..',
    'welcome' => 'Welcome',
    'help' => 'Help',
    'login' => 'Login',
    'signup' => 'Sign Up',
    'welcome_to' => 'Welcome to',
    'wallstant_main_string' => 'Meet new friends and stay connected with your family and with who you are interested anytime anywhere',
    'login_now' => 'Login now',
    'forgot_password' => 'Forgot your password?',
    'dont_have_an_account' => 'Don\'t have an account?',
    'for_free' => 'for free',
    'email_or_username' => 'Email or username',
    'loading' => 'Loading',
    'create_new_account' => 'Create new account',
    'create_account' => 'Create account',
    'confirm_password' => 'Confirm password',
    'by_clicking_signup_str' => 'By clicking Create account, you agree to our',
    'and' => 'and',
    'cookie_use' => 'Cookie use',
    'already_have_an_account' => 'Already have an account',
    'creating_your_account' => 'Creating your account',
    'done' => 'done',
    'enter_un_pwd_to_login' => 'Enter your username or email and password to login',
    'enter_username_to_login' => 'Enter your username to login',
    'enter_password_to_login' => 'Enter your password to login',
    'cannot_login_attempts' => 'You can not login now! wait (15 min) and try again',
    'un_email_not_exist' => 'Username or email not exist',
    'password_incorrect_you_have' => 'User password incorrect! You have',
    'attempts_to_login' => 'attempts to login',
    'un_and_pwd_incorrect' => 'User and password incorrect',
    'email_already_exist' => 'Email address already exist',
    'password_short' => 'Your password must be at least 6 characters long. Please try another',
    'password_not_match_with_cpassword' => 'Your password does not match with confirm field',
    'invalid_email_address' => 'Invalid email address',
    'signup_username_should_be_1' => 'Special characters not allowed',
    'signup_username_should_be_2' => 'Username should be in English',
    'signup_username_should_be_3' => 'Only ( _ ) allowed between words',
    'signup_username_should_be_4' => 'Numbers and letters are allowed',
    'signup_username_should_be_5' => 'White spaces not allowed between words',
    'username_not_allowed' => 'Error in username',
    'username_not_exists' => 'User name not exists! No User name like that you entered',
    'friends' => 'Friedns',
    'requests' => 'Requests',
    'continue_reading' => 'Continue reading',
   // ==========================================
    );
    return $lang[$txt];
}
?>