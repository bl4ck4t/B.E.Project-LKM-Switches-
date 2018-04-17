filename="$1"

m1=$(md5sum "$filename")

while true; do

  # md5sum is computationally expensive, so check only once every 10 seconds
  sleep 2

  m2=$(md5sum "$filename")

  if [ "$m1" != "$m2" ] ; then
    firefox https://www.google.com;
    exit 1
  fi
done
