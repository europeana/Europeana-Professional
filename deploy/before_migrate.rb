# as per:
# https://support.cloud.engineyard.com/entries/21016568-use-deploy-hooks

require 'yaml'

# Load database configuration
ey_db_configs = YAML.load("#{config.shared_path}/config/database.yml")
ey_db_config = ey_db_config[config.environment_name]
if ey_db_config === Nil then
    warning("Database configuration for '#{config.environment_name}' not found!")
end

# Build Bolt config_local data structure
my_db_config = {
    "database" => {
        "driver" => ey_db_config['adapter'],
        "host" => ey_db_config['host'],
        "databasename" => ey_db_config['database'],
        "username" => ey_db_config['username'],
        "password" => ey_db_config['password']
    }
}

# Write Bolt config_local YAML file
config_filename = "#{config.release_path}/app/config/config_local.yml"
File.open(config_filename, "w") do |f|
    f.write(yaml_source)
end

