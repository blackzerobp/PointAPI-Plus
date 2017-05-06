# monetary-unit: Set what monetary unit you want to use
monetary-unit: "P"
# add-op-at-rank: Set whether to show OPs at top point rank
add-op-at-rank: false
# default-point: Set default point when player joined the server first
default-point: 1000
# max-point: Set max point that player can have
max-point: 9999999999
# Whether to allow player to pay when taret player is offline
allow-pay-offline: true

# default-lang: Set default language
default-lang: def
# auto-save-interval: Set interval of auto-save
auto-save-interval: 10

# provider: Set provider of database (Available: yaml, mysql)
provider: yaml

# check-update: Set whether to check update from server
check-update: true
# update-host: Set host where to check update
update-host: onebone.me/plugins/points/api

# provider-settings: Data which will be given to database provider
provider-settings:
  host: 127.0.0.1
  port: 3306
  user: onebone
  password: hello_world
  db: pointapi
