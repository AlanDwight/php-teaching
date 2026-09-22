import numpy as np

x = np.array([1, 2, 3, 4, 5, 6, 7])
y = np.array([1.5, 3.8, 6.7, 9.0, 11.2, 13.6, 16.0])

# Regression line
slope, intercept = np.polyfit(x, y, 1)

y_pred = slope * x + intercept
residuals = y - y_pred

print("Slope:", round(slope, 4))
print("Intercept:", round(intercept, 4))
for xi, yi, yp, res in zip(x, y, y_pred, residuals):
    print(f"x={xi} | y={yi} | pred={round(yp, 2)} | residual={round(res, 2)}")
