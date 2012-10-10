set(fab_user='backupserverp',
       fab_hosts=['maneks.net'],
       root='/home/backupserverp/aurora-pharmacy.com',
       site='aurora-pharmacy.com')

  def deploy():
      local("git archive --format=tar HEAD | gzip > $(site).tar.gz")
      run("rm -rf $(root)$(site)")
      put("$(site).tar.gz', '$(root)$(site).tar.gz")
      run("cd $(root)$(site)")
      run("tar zxf $(site).tar.gz")
