app_name = "erms"

app {
  env = {}
  port = 80
  
  compute {
    cpu = 1
    memory = 768
    cpu_kind = "shared"
  }
  
  process {
    name = "erms"
  }
}
