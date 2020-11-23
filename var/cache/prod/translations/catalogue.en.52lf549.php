<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
    'fos_user.username.already_used' => 'The username is already used.',
    'fos_user.username.blank' => 'Please enter a username.',
    'fos_user.username.short' => 'The username is too short.',
    'fos_user.username.long' => 'The username is too long.',
    'fos_user.email.already_used' => 'The email is already used.',
    'fos_user.email.blank' => 'Please enter an email.',
    'fos_user.email.short' => 'The email is too short.',
    'fos_user.email.long' => 'The email is too long.',
    'fos_user.email.invalid' => 'The email is not valid.',
    'fos_user.password.blank' => 'Please enter a password.',
    'fos_user.password.short' => 'The password is too short.',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match.',
    'fos_user.new_password.blank' => 'Please enter a new password.',
    'fos_user.new_password.short' => 'The new password is too short.',
    'fos_user.current_password.invalid' => 'The entered password is invalid.',
    'fos_user.group.blank' => 'Please enter a name.',
    'fos_user.group.short' => 'The name is too short.',
    'fos_user.group.long' => 'The name is too long.',
    'fos_group.name.already_used' => 'The name is already used.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
  ),
  'ShopBundle' => 
  array (
    'currency' => '$',
    'layout.navbar.sitename' => 'Symfocommerce',
    'layout.navbar.home' => 'Home',
    'layout.navbar.news' => 'News',
    'layout.navbar.favourites' => 'Favourites',
    'layout.navbar.information' => 'Information',
    'layout.navbar.contacts' => 'Contacts',
    'layout.navbar.discounts' => 'Discounts',
    'layout.navbar.adminpanel' => 'Admin panel',
    'layout.navbar.loggedas' => 'Logged as',
    'layout.navbar.signin' => 'Sign in',
    'layout.navbar.logout' => 'Logout',
    'layout.navbar.login' => 'Login',
    'layout.navbar.enter' => 'Enter',
    'layout.navbar.signup' => 'Sign up',
    'layout.navbar.admin' => 'Admin',
    'layout.messages.mustberegistered' => 'You must be registered for this',
    'layout.messages.productnotfound' => 'Product not found',
    'layout.index.latestproducts' => 'Latest products',
    'layout.index.featuredproducts' => 'Featured products',
    'layout.lastseen.header' => 'Your last seen products',
    'categories.menu.header' => 'Categories',
    'manufacturers.menu.header' => 'Manufacturers',
    'category.view.grid' => 'Grid',
    'category.view.list' => 'List',
    'category.sort.by' => 'Sort by',
    'category.sort.default' => 'Default',
    'category.sort.price' => 'Price',
    'category.sort.name' => 'Name',
    'category.noproducts' => 'Sorry, no products in this category yet!',
    'manufacturer.view.grid' => 'Grid',
    'manufacturer.view.list' => 'List',
    'manufacturer.sort.by' => 'Sort by',
    'manufacturer.sort.default' => 'Default',
    'manufacturer.sort.price' => 'Price',
    'manufacturer.sort.name' => 'Name',
    'manufacturer.noproducts' => 'Sorry, no products of this manufacturer yet!',
    'cart.addtocart' => 'Add to cart',
    'cart.navbar.goods' => 'goods for',
    'cart.title.cart' => 'Cart',
    'cart.isempty' => 'Your cart is empty',
    'cart.isemptyyet' => 'Your cart is empty yet',
    'cart.continue' => 'continue shopping',
    'cart.yourcart' => 'Your cart',
    'cart.table.product' => 'Product',
    'cart.table.quantity' => 'Quantity',
    'cart.table.price' => 'Price',
    'cart.table.sum' => 'Sum',
    'cart.table.totalsum' => 'Total sum of the order',
    'cart.checkout' => 'CHECKOUT',
    'cart.clear' => 'Clear',
    'cart.pleasereg' => 'Please Registrate!',
    'cart.regadvadtages' => 'Please registrate to use all site advantage!',
    'cart.login' => 'Login',
    'cart.register' => 'Register',
    'cart.continuewithout' => 'Continue without registration',
    'orderform.orderform' => 'Order Form',
    'orderform.name' => 'Name',
    'orderform.email' => 'Email',
    'orderform.phone' => 'Phone',
    'orderform.address' => 'Address',
    'orderform.yourcomment' => 'Your comment',
    'orderform.submit' => 'Submit',
    'orderform.totalsumis' => 'Total sum is',
    'thankyou.handleorder' => 'Thank you! We handle your oder as soon as possible!',
    'thankyou.continue' => 'continue shopping',
    'thankyou.thankyou' => 'Thank you!',
    'news.nonews' => 'No news yet',
    'slider.previous' => 'previous',
    'slider.next' => 'next',
    'search.searchfor' => 'Search for',
    'search.search' => 'search',
    'notification.neworder' => 'You have recieved a new order',
    'errors.pnf.header' => 'Page not found',
    'errors.pnf.description' => 'The requested page couldn\'t be located. Checkout for any URL misspelling or return to the homepage',
    'errors.pnf.tohomepage' => 'To homepage',
    'errors.err.header' => 'Ooops! Something went wrong!',
    'errors.err.description' => 'An error was occuped. We will fix it as soon as possible, you can go to the homepage',
    'errors.err.tohomepage' => 'To homepage',
    'product.notavailable' => 'Sorry, this product is not available!',
    'favourites.view.grid' => 'Grid',
    'favourites.view.list' => 'List',
    'favourites.sort.by' => 'Sort by',
    'favourites.sort.default' => 'Default',
    'favourites.sort.price' => 'Price',
    'favourites.sort.name' => 'Name',
    'favourites.sort.added' => 'Added',
    'favourites.yourfavouriteproducts' => 'Your Favourite Products',
    'favourites.noproducts' => 'You have not favourite products yet!',
    'registration.firstname' => 'Firstname',
    'registration.lastname' => 'Lastname',
    'registration.phone' => 'Phone number',
    'registration.address' => 'Address',
    'registration.successful' => 'Registration completed successful!',
    'registration.back' => 'Back',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated.',
    'group.flash.created' => 'The group has been created.',
    'group.flash.deleted' => 'The group has been deleted.',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Log in',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated.',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed.',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.
',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully.',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

This link can only be used once to validate your account.

Regards,
the Team.
',
    'resetting.check_email' => 'An email has been sent. It contains a link you must click to reset your password.
Note: You can only request a new password once within %tokenLifetime% hours.

If you don\'t get an email check your spam folder or try again.
',
    'resetting.request.username' => 'Username or email address',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully.',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Log out',
    'layout.login' => 'Log in',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
  'messages' => 
  array (
    'eShop' => 'eShop',
    'Products' => 'Products',
    'Categories' => 'Categories',
    'Manufacturers' => 'Manufacturers',
    'News' => 'News',
    'Orders' => 'Orders',
    'Measures' => 'Measures',
    'Slides' => 'Slides',
    'Static pages' => 'Static pages',
    'Logout' => 'Logout',
    'Administration panel' => 'Administration panel',
    'Hello, choose a category!' => 'Hello, choose a category!',
    'Products list' => 'Products list',
    'Create new Product' => 'Create new Product',
    'Name' => 'Name',
    'Category' => 'Category',
    'Manufacturer' => 'Manufacturer',
    'Price' => 'Price',
    'Photo' => 'Photo',
    'Q-ty' => 'Q-ty',
    'Actions' => 'Actions',
    'show' => 'show',
    'Show' => 'Show',
    'edit' => 'edit',
    'Edit' => 'Edit',
    'no photos' => 'no photos',
    'no photo' => 'no photo',
    'Product' => 'Product',
    'Slug' => 'Slug',
    'Description' => 'Description',
    'Image' => 'Image',
    'Quantity' => 'Quantity',
    'Measure' => 'Measure',
    'Measure quantity' => 'Measure quantity',
    'Meta keys' => 'Meta keys',
    'Meta description' => 'Meta description',
    'Back to the list' => 'Back to the list',
    'Product edit' => 'Product edit',
    'generate slug' => 'generate slug',
    'remove' => 'remove',
    'attach photos here' => 'attach photos here',
    'Product create' => 'Product create',
    'Category list' => 'Category list',
    'Category edit' => 'Category edit',
    'Category creation' => 'Category creation',
    'Create a new category' => 'Create a new category',
    'Manufacturer list' => 'Manufacturer list',
    'Manufacturer edit' => 'Manufacturer edit',
    'Manufacturer creation' => 'Manufacturer creation',
    'Create a new manufacturer' => 'Create a new manufacturer',
    'News list' => 'News list',
    'News edit' => 'News edit',
    'News creation' => 'News creation',
    'Create a new news' => 'Create a new news',
    'Measure list' => 'Measure list',
    'Measure edit' => 'Measure edit',
    'Measure creation' => 'Measure creation',
    'Create a new measure' => 'Create a new measure',
    'Title' => 'Title',
    'Text' => 'Text',
    'Orders list' => 'Orders list',
    'No orders yet' => 'No orders yet',
    'Client name' => 'Client',
    'Order date' => 'Date',
    'Id' => 'Id',
    'Email' => 'Email',
    'Phone' => 'Phone',
    'Address' => 'Address',
    'Comment' => 'Comment',
    'No comment' => 'No comment',
    'Slide' => 'Slide',
    'Slide list' => 'Slide list',
    'Slide edit' => 'Slide edit',
    'Slide creation' => 'Slide creation',
    'Create a new slide' => 'Create a new slide',
    'File' => 'File',
    'Slide order' => 'Slide order',
    'Update' => 'Update',
    'Create' => 'Create',
    'Delete' => 'Delete',
    'Enabled' => 'Enabled',
    'yes' => 'yes',
    'no' => 'no',
    'Please sign in' => 'Please sign in',
    'Previous' => 'Previous',
    'Next' => 'Next',
    'Create a new page' => 'Create a new page',
    'Page order' => 'Page order',
    'Static page edit' => 'Static page edit',
    'Static page creation' => 'Static page creation',
    'Static page' => 'Static page',
    'Content' => 'Content',
    'Order num' => 'Order num',
    'Order No' => 'Order',
    'currency' => '$',
    'Order totalsum' => 'Order Total',
    'Total' => 'Total',
    'Site settings' => 'Site settings',
    'Settings list' => 'Settings list',
    'Show empty categories' => 'Show categories without products',
    'Show empty manufacturers' => 'Show manufacturers without products',
    'User list' => 'User list',
    'Username' => 'Username',
    'Registration date' => 'Registration date',
    'User' => 'User',
    'Firstname' => 'Firstname',
    'Lastname' => 'Lastname',
    'Phone number' => 'Phone number',
    'Join date' => 'Join date',
    'Featured products' => 'Featured products',
    'Featured products list' => 'Featured products list',
    'save' => 'save',
    'cancel' => 'cancel',
    'featured' => 'featured',
    'not featured' => 'not featured',
    'not registered' => 'not registered',
    'Product deleted' => 'this product was deleted',
    'Are you sure?' => 'Are you sure?',
    'OK' => 'OK',
    'Search' => 'Search',
    'Search phrase' => 'Search phrase',
    'Products not sound' => 'Products not sound',
  ),
  'OneupUploaderBundle' => 
  array (
    'error.maxsize' => 'This file is too large.',
    'error.whitelist' => 'This file type is not allowed.',
    'error.blacklist' => 'This file type is not allowed.',
  ),
  'HWIOAuthBundle' => 
  array (
    'header.connecting' => 'Connecting',
    'header.success' => 'Successfully connected the account "%name%"!',
    'header.register' => 'Register with the account "%name%"',
    'header.registration_success' => 'Successfully registered and connected the account "%username%"!',
    'connect.confirm.cancel' => 'Cancel',
    'connect.confirm.submit' => 'Connect account',
    'connect.confirm.text' => 'Are you sure that you want to connect your %service% account "%name%" to your current account?',
    'connect.registration.cancel' => 'Cancel',
    'connect.registration.submit' => 'Register account',
  ),
));


return $catalogue;