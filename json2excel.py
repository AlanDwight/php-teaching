import pandas as pd 

json_file = "user_data.json"
excel_output = "user_data.xlsx"


df = pd.read_json(json_file)

df.to_excel(excel_output, index=False)
