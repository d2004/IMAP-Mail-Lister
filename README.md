# IMAP-Mail-Lister
List your emails and download the files

# How is IMAP Mail Lister
iMap Mail Lister (or imap mail extracter) is the my software used to extract the emails and easy download the email files. but it' s very easy! 

# How to Use? 
1. Download the ZIP of this opensource
2. Upload on your hosting
3. Unzip the zip on your site
4. Include the file:
   <code><?php include('IMAP-Mail-Lister-master/host.php'); ?></code>
5. Type the array show: <code><?php $Messages = getMail(); print_r($Messages); ?></code>
6. Try the script

<b>N.B: This script require the user login, but this redirect to the imap/login.php page</b>
