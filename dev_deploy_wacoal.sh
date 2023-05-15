yarn build

zip -r wacoal.zip themes/wacoal/

echo "Uploading theme zip file"

scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem wacoal.zip ubuntu@13.52.136.49:/home/ubuntu/wordpress/wacoal/wp-content/themes

ssh -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem ubuntu@13.52.136.49 << EOF
  pwd
  cd wordpress/wacoal/wp-content/themes
  pwd
  ls -alh
  echo "Extracting theme zip file"

  unzip -o wacoal.zip -d wacoal_temp
  rm -rf wacoal && mv wacoal_temp/themes/wacoal/ ./wacoal && rm -rf wacoal_temp

  echo "Removing theme zip file"
  rm wacoal.zip
  cd ../..
  wp theme activate wacoal
EOF

rm wacoal.zip

pwd

cd ../../..

# scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem /home/swapnil/Projects/wacoal/plugins/advanced-custom-fields-pro.zip ubuntu@13.52.136.49:/home/ubuntu/wordpress/wacoal/wp-content/plugins