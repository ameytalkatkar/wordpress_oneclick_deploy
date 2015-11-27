# wordpress_oneclick_deploy

Used Docker-Compose 

Vagrantfile:
uses this vagrant image : puphpet/ubuntu1404-x64
port is forwarded to 8080, so localhost:8080 will open admin panel of word press after successful installation
Vagrant docker provisioner is used to download MySql's docker image which will be used in later point of time (i.e. another option to do the exercise)
Vagrant file provisioners are used to transfer files from local machine to Vagrant VM
Vagrant shell provisioners are used to execute shell scripts written on Vagrant VM without copying the files to VM

At first wordpress_download.sh is executed and latest wordpress files are downloaded on the VM machine. All the old files are deleted

After this run.sh is executed which first downloads docker-compose, makes it executable and finally runs the docker-compose with up option in order to start building the docker image

Docker-Compose reads docker-compose.yml file which has flow defined
As per this flow, first build task is executed and for that Dockerfile is used. During this build php image is referred and downloaded later this image is modified by adding wordpress files to it which were downloaded earlier. Mounting of current local directory to code directory of container is also done here. Port exposure and required commands are executed as a part of this process.

Then with the help of linking feature this container is connected with MySql container which will be downloaded as a part of db task. We creaet WordPress database also.

When the build is complete, from our localhost:8080 we can access the WP. wp-config.php file can be used to do some level of configuration for WP.