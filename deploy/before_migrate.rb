# as per:
# https://support.cloud.engineyard.com/entries/21016568-use-deploy-hooks

require 'yaml'

config_local = {
    'database' => {
        'driver' => 'mysql',
        'databasename' => ENV['DB_NAME'],
        'username' => ENV['DB_USER'],
        'password' => ENV['DB_PASS'],
        'pompidom' => ENV['HOME']
    }
}

config_filename = "#{config.release_path}/app/config/config_local.yml"

yaml_source = YAML.dump(config_local).split("\n").drop(1).join("\n")

File.open(config_filename, "w") do |f|
    f.write(yaml_source)
end
