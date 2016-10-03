## Troubleshoots

### linshare.war can not be deployed

```
# you may have the following error :
# linshare_backend | Caused by: java.lang.IllegalStateException: Unable to complete the scan for annotations for web
# application [/linshare] due to a StackOverflowError. Possible root causes include a too low setting for -Xss and
# illegal cyclic inheritance dependencies. The class hierarchy being processed was
# [org.bouncycastle.asn1.ASN1EncodableVector->org.bouncycastle.asn1.DEREncodableVector->org.bouncycastle.asn1.ASN1EncodableVector]
```

You have to enable catalina.properties volume for the backend service in the
docker-compose.yml and recreate your container :

```
# stop it
$ docker-compose stop backend

# rm it
$ docker-compose rm backend

# edit docker-compose.yml
$ vim docker-compose.yml

# recreate it
$ docker-compose up -d

# you could check if the container is up and the volume is mount using this command :
# First, get the id of the running backend container:
$ docker ps -q -f "name=linshare_backend"

# then the status of the mounted volumes
$ docker inspect <id> |grep -i '"Volumes":' -A5

# Or in one line :
$ docker inspect $(docker ps -aq -f "name=linshare_backend")  |grep -i '"Volumes":' -A4
```
