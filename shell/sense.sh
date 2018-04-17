filename="$1"

m1=$(md5sum "$filename")

while true; do
  sleep 2

  m2=$(md5sum "$filename")

  if [ "$m1" != "$m2" ] ; then
    firefox https://www.google.com;
    exit 1
  fi
done
