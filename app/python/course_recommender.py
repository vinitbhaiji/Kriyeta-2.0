import pandas as pd
import sys
import json

# Placeholder for loading/creating cv DataFrame 
# ******************************************
# YOU NEED TO REPLACE THIS WITH YOUR ACTUAL 'cv' DATA LOGIC
data = {'Course_Name': ['Intro to SQL', 'SQL for Data Analysis', 'Advanced SQL Techniques'],
        'Level': ['Beginner', 'Intermediate', 'Advanced'],
        'platform': ['Udemy', 'Coursera', 'Udemy'],
        'rating': [4.5, 4.0, 4.8]}
cv = pd.DataFrame(data)
# ******************************************

def fun(str1):
    import numpy as np
import pandas as pd
import pandas as pd
import numpy as np
import contractions
import re
import nltk
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize,sent_tokenize
from nltk.stem import WordNetLemmatizer
from nltk.tokenize import RegexpTokenizer
import string
from nltk.stem.porter import PorterStemmer
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.model_selection import train_test_split
from sklearn.svm import LinearSVC
from sklearn.naive_bayes import BernoulliNB
from sklearn.metrics import accuracy_score
from sklearn.naive_bayes import MultinomialNB
from sklearn.metrics import confusion_matrix, classification_report
from sklearn.ensemble import RandomForestClassifier
from sklearn.linear_model import LogisticRegression
cv = pd.read_csv(r"C:\Users\Vinit Bhaiji\OneDrive\Desktop\file.csv", encoding='latin-1')
# cv2 = pd.re
cv.head()
cv.rename(columns ={'all_skill':'tags',"Course Name":"Course_Name","University / Industry Partner Name":"platform","Course Rating":"rating","Course URL":"URL","Difficulty Level":"Level","Course Description":"Description"},inplace=True)
cv.dropna(subset=['tags'], inplace=True)
cv.dropna(subset=['Course_Name'], inplace=True)
cv["Description"].fillna("Not available",inplace = True)
cv.drop_duplicates(inplace=True)
cv["tags"] = cv["tags"].str.lower()
cv['Course_Name'] = cv["Course_Name"].str.lower()
# removing punctuations
punctuations_list = string.punctuation
def remove_punctations(text):
    for i in text:
        for j in punctuations_list:
            if i == j:
#                 print(i)
                text = text.replace(i,' ')
    return text.strip()

cv['tags'] = cv['tags'].apply(remove_punctations)

# fixing contractions
def fixing_contractions(text):
    return contractions.fix(text)
cv['tags'] = cv['tags'].apply(fixing_contractions)
cv['Course_Name'] = cv['Course_Name'].apply(fixing_contractions)
cv.head()

# Define function to clean numbers
def cleaning_number(text):
    return re.sub(r'\d', ' ', text)

# Apply number cleaning to 'tags' column using .loc[]
cv.loc[:, 'tags'] = cv['tags'].apply(cleaning_number)
def fun(str1):
    # Get unique platforms from the DataFrame
    platforms = cv['platform'].unique()

    # Define priority order based on platform and level
    level_priority = {}
    for platform in platforms:
        level_priority[(platform, "Beginner")] = 0
        level_priority[(platform, "Intermediate")] = 1
        level_priority[(platform, "Advanced")] = 2

    # Filter courses containing the search string and with beginner level
    filtered_courses = cv[cv['Course_Name'].str.contains(str1, case=False)]
    filtered_courses = filtered_courses[filtered_courses['Level'] == 'Beginner']

    # Sort courses based on priority order and rating
    filtered_courses['priority'] = filtered_courses.apply(lambda row: level_priority.get((row['platform'], row['Level']), 6), axis=1)
    filtered_courses = filtered_courses.sort_values(by=['priority', 'rating'], ascending=[True, False])

# Prepare course details as a list of dictionaries
    recommended_courses = []
    for index, row in filtered_courses.iterrows():
        course_details = {
            "Course Name": row["Course_Name"],
            "Level": row["Level"],
            "Platform": row["platform"],
            "Rating": row["rating"]
        }
        recommended_courses.append(course_details)

        return json.dumps(course_details) 
# Example call to the function
fun("sql")
# Example call to the function
# fun("sql")



# if __name__ == '__main__':
#     input_string = sys.argv[1]
#     result = fun(input_string)
#     print(result)
