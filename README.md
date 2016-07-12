# Linshare-Docker

> Docker is available [here](https://www.docker.com/products/docker) and docker-compose [here](https://docs.docker.com/compose).
> Make sure that these are installed on your system before starting.

* Docker can be installed with the following lines on most distros :

```bash
$ curl -sSL https://get.docker.com | sudo curl
```

* docker-compose can be installed as :

```bash
# As a binary
$ cd path/to/linshare-docker
$ curl -sL https://github.com/docker/compose/releases/download/1.7.0/docker-compose-`uname -s`-`uname -m` > ./docker-compose
$ sudo chmod +x ./docker-compose

# As a python package
$ pip install -r requirements.txt
```

### Presentation

    Deploy a Linshare instance with ease using Docker and docker-compose

This docker-compose aims to make possible to quickly run a Linshare appliance.
It consists of several containers :

* Tomcat with Linshare User's interface and server inside
* Postgresql for the server
* Apache2 with Linshare Admin's interface
* Apache2 with Linshare UploadRequest's interface
* Apache2 acting as a reverse-proxy for the above (except Postgresql)
* Opensmtp server configured in relay mode
* ClamAV server to be used by Tomcat

Most of the containers can be configured to suits your needs, the available settings are either already used (and you have just to replace them) or commented out.


### How to use it

```bash
# use this line to launch it in background
$ docker-compose up -d

# use this line to launch it in interactive
$ docker-compose up

# use this line to stop while launch in background
$ docker-compose stop

# use this line to delete previously created containers
$ docker-compose down
```

By default the containers are listenning to **linshare.local** so you may have to add the following lines in your hosts file :

```bash
127.0.0.1   linshare.local admin.linshare.local request.linshare.local
```

And all uses the ```https``` protocol via the port 443.

### Quick start

Once everything is running, you still have to establish a connection to your LDAP server.

1. Browse to [admin.linshare.local](https://admin.linshare.local)
2. Select Settings
3. Go to the LDAP section and Add LDAP connection
4. Fullfil the needed fields
    - Add a domain pattern
    - Add a domain with a user provider
5. Create a search request to check if the settings are correct
6. Browse to [linshare.local/linshare](https://linshare.local/linshare)
7. Log in with a user available in the provided LDAP
8. Enjoy Linshare

### License

View [license information](http://www.linshare.org/licenses/LinShare-License_AfferoGPL-v3_en.pdf) for the software contained in this image.

### Supported Docker versions

This image is officially supported on Docker version 1.9.0.

Support for older versions (down to 1.6) is provided on a best-effort basis.

Please see [the Docker installation documentation](https://docs.docker.com/installation/) for details on how to upgrade your Docker daemon.


### User Feedback

#### Documentation

Official Linshare documentation is available here : [Linshare Configuration Guide (pdf format)](http://download.linshare.org/documentation/admins/Linagora_DOC_LinShare-1.7.0_Guide-Config-Admin_fr_20150303.pdf).


#### Issues

If you have any problems with or questions about this image, please contact us through a [GitHub issue](https://github.com/linagora/linshare-backend/issues).
