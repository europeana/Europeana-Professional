# as per:
# https://support.cloud.engineyard.com/entries/21016568-use-deploy-hooks

require 'yaml'

# Load database configuration
ey_db_configs = nil
File.open("#{config.shared_path}/config/database.yml", "r") do |f|
    ey_db_configs = YAML.load(f)
end
if ey_db_configs === nil then
    warning("Database configuration file '#{config.shared_path}/config/database.yml' not found or invalid!")
end
info(YAML.dump(ey_db_configs))
ey_db_config = ey_db_configs['production']
if ey_db_config === nil then
    warning("Database configuration for 'production' not found!")
end

if ey_db_config['environment'] === nil then
    ey_db_config['environment'] = 'prod'
end

# turn this on later
ey_environment = nil
if ey_environment === nil then
    File.open("#{config.shared_path}/config/localconfig/environment.yml", "r") do |f|
        ey_environment = YAML.load(f)
    end
    info(YAML.dump(ey_environment))
    if ey_environment['environment'] === nil then
        warning("Database configuration file '#{config.shared_path}/config/localconfig/environment.yml' not found or invalid!")
    else
        ey_db_config['environment'] = ey_environment['environment']
    end
end

# Build Bolt config_local data structure
my_db_config = {
    "database" => {
        "driver" => ey_db_config['adapter'],
        "host" => ey_db_config['host'],
        "databasename" => ey_db_config['database'],
        "username" => ey_db_config['username'],
        "password" => ey_db_config['password']
    },
    "environment" => ey_db_config['environment']
}

# Write Bolt config_local YAML file
config_filename = "#{config.release_path}/app/config/config_local.yml"
File.open(config_filename, "w") do |f|
    f.write(YAML.dump(my_db_config))
end

# copy local configuration overrides to current site
# run!("cp #{config.shared_path}/app/config/localconfig/*_local.yml #{config.release_path}/app/config/")
run!("cp #{config.shared_path}/config/localconfig/extensions/*_local.yml #{config.release_path}/app/config/extensions/")

# Make app/cache
run!("mkdir app/cache")
run!("chmod 777 app/cache")
run!("ln -s ~/Dropbox ./files")
# install extensions
# run!("rm -rf extensions/vendor")
# run!("cd extensions; composer update")
