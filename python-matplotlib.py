import matplotlib.pyplot as plt
import numpy as np 

# print(matplotlib.__version__)

xPoints = np.array([1,3,5,7])
y1 = np.array([3, 8, 1, 10])
y2 = np.array([6, 2, 7, 11])

plt.plot(xPoints,y1,'o:r', ms=20, mec='b', mfc='g', lw=3)
plt.plot(xPoints,y2,'o:b', ms=20, mec='b', mfc='g', lw=3)
plt.show()  