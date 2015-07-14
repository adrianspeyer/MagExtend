Mark8t Vanilla jsConnect
------
Extension which allows you to connect your Vanilla Forum to Magento with jsConnect.
A fork of sorts of Vanilla Connect created by https://github.com/thebod.

Steps to get working
------
1. Make sure you have a Vanilla Forum. If you don't have one, get one from  http://vanillaforums.com.
2. Enable the jsConnect Vanilla Plugin. If self-hosting, get it from: (http://vanillaforums.org/addon/jsconnect-plugin)
3. Setup a Connection in Vanilla
    a. Generate a secret and key at the bottom ( you will need these later)
    b. SiteName: Give name that is clear for sign in on the forum.
    c. For Authenticate use: http://yourmagentosite.com/vanillajsconnect
    d. For SignIn Url use: http://yourmagentosite.com/index.php/customer/account/login/
    e. Key register url and signout url empty
    f. Leave unchecked "Make this connection your default signin method."
4. In Vanilla Forums backend go to Users>Registration: change method to Connect
5. Copy and past secret and key into in Mark8t Vanilla jsConnect 

**Bonus: Works with the Vanilla Comments plugin**

This is not an officially released Vanilla Forums plugin. Please test and use at your own risk.

As origianl, released under http://creativecommons.org/licenses/by/3.0/
