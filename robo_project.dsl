job('building-with-robo') {
    scm {
        github('git@github.com:Kakolu/my-jenkins.git', 'master')
    }
    
    parameters {
        booleanParam('COVER', true, "Uncheck if you dont want to build")
    }

    steps {
        shell("echo 'I am going to build the Robofile'")
        shell("sh build.sh")
    }
}
