yarn btemptd-build

zip -r btemptd.zip themes/btemptd/

echo "Uploading theme zip file"

scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem btemptd.zip ubuntu@54.176.104.254:/home/ubuntu/wordpress/wacoal/wp-content/themes

ssh -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem ubuntu@54.176.104.254 << EOF
  pwd
  cd wordpress/wacoal/wp-content/themes
  pwd
  ls -alh
  echo "Extracting theme zip file"

  unzip -o btemptd.zip -d btemptd_temp
  rm -rf btemptd && mv btemptd_temp/themes/btemptd/ ./btemptd && rm -rf btemptd_temp

  echo "Removing theme zip file"
  rm btemptd.zip
  cd ../..
EOF

rm btemptd.zip

pwd

cd ../../..

# scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem /home/swapnil/Projects/wacoal/plugins/advanced-custom-fields-pro.zip ubuntu@54.176.104.254:/home/ubuntu/wordpress/wacoal/wp-content/plugins