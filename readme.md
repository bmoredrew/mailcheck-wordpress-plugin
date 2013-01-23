# Mailcheck.js WordPress Plugin

WordPress plugin to add and configure Mailcheck.js to your site forms.

Will work with any form or form plugin, including Gravity Forms and Contact Form 7.

Also has the ability to use this on WordPress registration page. (wp-login.php)


## What does Mailcheck.js do?

From the [mailcheck.js github](https://github.com/Kicksend/mailcheck) page:

When your user types in "user@hotnail.con", Mailcheck will suggest "user@hotmail.com".

Mailcheck will offer up suggestions for top level domains too, and suggest ".com" when a user types in "user@hotmail.cmo".


## Configuring Mailcheck WordPress Plugin

At the moment there is no settings or admin panel to configure the plugin. This is in the works- just not sure when it will be completed. 

If you want to make a pull request and build one, by all means! This is GPL2 and you will be credited if the branch is merged.

### Defining the e-mail field (#email by default):
simply change the selector on `line 30` in `wp-mailcheck-main.php`

### Adding more domains:
edit `line 4` in `/views/mailcheck-inline-script.php`

### Adding more TLD's:
edit `line 8` in `/views/mailcheck-inline-script.php`


## Styling The Mailcheck Message

You can style the message displayed when a possible error occurs using `.szbl-mailcheck-msg`. 

Example:

`.szbl-mailcheck-msg {
display: block;
color: red;
}`

Result:

![Mailcheck WordPress plugin styled](http://baltimoredrew.com/assets/plugins/mailcheck-styled.png)


## Contributors

[WordPress Developer](http://www.baltimoredrew.com) Drew Poland

Twitter: [@bmoredrew](http://www.twitter.com/@bmoredrew)

[WordPress PHP Developer](http://www.theandystratton.com) Andy Stratton

Twitter: [@theandystratton](http://www.twitter.com/@theandystratton)


## Mailcheck.js WordPress Plugin License

Copyright (c) 2012 [Sizeable Interactive](http://www.sizeableinteractive.com)

Licensed under the GPL2 License. See wp-mailcheck.php for more details.