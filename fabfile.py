from fabric.api import run, local, put, sudo, env
from fabric.context_managers import cd

env.user = 'backupserverp'
env.hosts = ['maneks.net']
env.root = '/home/backupserverp/'
env.site = 'aurora-pharmacy.com'

def deploy():
  local("git archive --format=tar HEAD | gzip > %s.tar.gz" % env.site)
  put("%s.tar.gz" % env.site, "%s%s.tar.gz" % (env.root, env.site))
  run("rm -rf %s%s/*" % (env.root, env.site))
  with cd("%s%s" % (env.root, env.site)):
    run("tar zxf %s%s.tar.gz" % (env.root, env.site))
  
