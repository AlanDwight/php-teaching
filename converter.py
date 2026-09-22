import os
from docx2pdf import convert


def convert_word_to_pdf(target_path):
    """Converts a single .docx file or a whole folder of .docx files to PDF."""
    if not os.path.exists(target_path):
        print(f"Error: The path '{target_path}' does not exist.")
        return

    # Check if the path is a single file
    if os.path.isfile(target_path):
        if target_path.lower().endswith(".docx"):
            print(f"Converting file: {target_path}")
            convert(target_path)
            print("Conversion complete!")
        else:
            print("Error: The selected file is not a .docx file.")

    # Check if the path is a folder
    elif os.path.isdir(target_path):
        print(f"Converting all .docx files in folder: {target_path}")
        # This automatically finds and converts all .docx files in the folder
        convert(target_path)
        print("Bulk conversion complete!")


if __name__ == "__main__":
    # Examples:
    # 1. To convert a specific folder of files, use:
    # my_path = r"C:\Users\YourName\Documents\WordFiles"

    # 2. To convert a single specific file, use:
    # my_path = r"C:\Users\YourName\Documents\WordFiles\Document.docx"

    # 3. Current directory default:
    my_path = os.getcwd()

    convert_word_to_pdf(my_path)
