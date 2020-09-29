yarn wacoal-build

zip -r wacoal.zip themes/wacoal/

echo "Uploading theme zip file"

scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem wacoal.zip ubuntu@54.176.104.254:/home/ubuntu/wordpress/wacoal/wp-content/themes

ssh -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem ubuntu@54.176.104.254 << EOF
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

# scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem /home/swapnil/Projects/wacoal/plugins/advanced-custom-fields-pro.zip ubuntu@54.176.104.254:/home/ubuntu/wordpress/wacoal/wp-content/plugins


blog.wacoal-america.mark4.oablab.com blog.wacoal-canada.mark4.oablab.com btemptdblog.wacoal-america.mark4.oablab.com