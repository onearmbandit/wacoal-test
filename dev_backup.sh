ssh -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem ubuntu@13.52.136.49 << EOF
  cd wordpress/wacoal/wp-content/
  ls -alh
  rm -rf uploads.zip && zip -r uploads.zip uploads/

  cd ../../..
  rm -rf wacoal.sql
  mysqldump -u root -pxsCKfqnk6PDQ wacoal > wacoal.sql
EOF

scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem ubuntu@13.52.136.49:/home/ubuntu/wordpress/wacoal/wp-content/uploads.zip ~/Workspace/Wacoal/backup/
scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem ubuntu@13.52.136.49:/home/ubuntu/wacoal.sql ~/Workspace/Wacoal/backup/
