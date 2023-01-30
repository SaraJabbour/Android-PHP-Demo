# Android-PHP-Demo
## Notes
### Manifest.xml
In order to connect to internet
```
<uses-permission android:name="android.permission.INTERNET" />
    <uses-permission android:name=
        "android.permission.ACCESS_NETWORK_STATE" />
    <uses-permission android:name=
        "android.permission.ACCESS_WIFI_STATE" />
 ```
 To send text
 ```
 <application
         android:usesCleartextTraffic="true" />

 ```
 Note: Don't forget to add the intents
 ### Firewalls and permissions
 - Make sure that the httpd.conf property is require all granted in Directory root
 ```
 <Directory "C:/xampp/htdocs"> 
    #
    # Controls who can get stuff from this server.
    #
    Require all granted
</Directory>
 ```
 - Disable firewalls 

## Main idea
We will be reading from php files and sending Http Requests
