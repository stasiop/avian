import os.path
import os
import time
path="/var/www/html/src/messageHandler/uploads/"
filelist = []
print ("current time:", time.time())
for (root, dirs, file) in os.walk(path):
        for f in file:
                print("looking at file: ",f, "  date modified: ", os.path.getmtime(path+f))
                if os.path.getmtime(path+f) < time.time()-2592000:
                        os.remove(path+f)
                        print("deleted: ",f)
