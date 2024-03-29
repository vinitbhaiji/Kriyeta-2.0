# -*- coding: utf-8 -*-
"""recommendation model

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1DA0p_Yf3hN6CAnEFQhi2nn07M1WpipBF
"""

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
from wordcloud import WordCloud
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.model_selection import train_test_split
from sklearn.svm import LinearSVC
from sklearn.naive_bayes import BernoulliNB
from sklearn.metrics import accuracy_score
from sklearn.naive_bayes import MultinomialNB
from sklearn.metrics import confusion_matrix, classification_report
from sklearn.ensemble import RandomForestClassifier
from sklearn.linear_model import LogisticRegression

cv = pd.read_csv(r"/content/file.csv", encoding='latin-1')
# cv2 = pd.re

# cv.head()

# cv.head()

# cv.loc[38,"all_skill"]

# cv.loc[1235,"Course Name"]

# cv.loc[1235,"Course URL"]

# cv.duplicated().sum()

# cv.head()

cv.rename(columns ={'all_skill':'tags',"Course Name":"Course_Name","University / Industry Partner Name":"platform","Course Rating":"rating","Course URL":"URL","Difficulty Level":"Level","Course Description":"Description"},inplace=True)

cv.dropna(subset=['tags'], inplace=True)

cv.dropna(subset=['Course_Name'], inplace=True)

# #cleaning null values
# cv.isnull().sum()

# cv.isnull().sum()

cv["Description"].fillna("Not available",inplace = True)

# cv.isnull().sum()

# cv.head()

# cv.duplicated().sum()

cv.drop_duplicates(inplace=True)

cv["tags"] = cv["tags"].str.lower()

cv['Course_Name'] = cv["Course_Name"].str.lower()

# cv.head()

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

# cv.head()

# fixing contractions
def fixing_contractions(text):
    return contractions.fix(text)
cv['tags'] = cv['tags'].apply(fixing_contractions)
cv['Course_Name'] = cv['Course_Name'].apply(fixing_contractions)
cv.head()

import re

# Define function to clean numbers
def cleaning_number(text):
    return re.sub(r'\d', ' ', text)

# Apply number cleaning to 'tags' column using .loc[]
cv.loc[:, 'tags'] = cv['tags'].apply(cleaning_number)

# cv.loc[4,"tag/s"]

# tokenization
# tokenizing words
# cv['tags'] = cv['tags'].apply(RegexpTokenizer(r'\w+').tokenize)
# cv.head()

# def lemmatize_tags(tags):
#     lemmatizer = WordNetLemmatizer()
#     return [lemmatizer.lemmatize(tag) for tag in tags]

# # Apply lemmatization to the tags column
# # cv['tags'] = cv['tags'].apply(word_tokenize).apply(lemmatize_tags)
# lemmatize_tags('a')

# #lemmatization
# # converting text into numbers
# # using bag of words
# ps = PorterStemmer()
# def stem_text(txt):
#     return [ps.stem(word) for word in txt]

# cv["tags"] = cv["tags"].apply(stem_text)
# type(cv['tags'])

# cv.head()

# import matplotlib.pyplot as plt
# data_neg = cv['tags'][:800000]
# plt.figure(figsize = (40,40))
# wc = WordCloud(max_words = 10000 , width = 1600 , height = 800,
#                collocations=False).generate(" ".join(' '.join(l) for l in data_neg))
# plt.imshow(wc)

# import gensim
# from gensim.models import Word2Vec

# cv['tags'] = cv['tags'].apply(RegexpTokenizer(r'\w+').tokenize)
# # cv
# # # Tokenize the text data
# cv['tags'] = cv['tags'].apply(word_tokenize)
# # cv.head()
# from gensim.models import Word2Vec

# # Train Word2Vec model
# sentences = [tags.split() for tags in cv['tags']]
# model = Word2Vec(sentences=sentences, vector_size=100, window=5, min_count=5, workers=4)

# # Save the trained model
# model.save("word2vec_model")

# # Test the model
# if 'data' in model.wv:
#     print(model.wv.most_similar('',topn=5))
# else:
#     print("Word 'data' not found in vocabulary.")
# cv['tags'] = cv['tags'].apply(gensim.utils.simple_preprocess)









"""def fun(str1, level_priority=None):
    if level_priority is None:
        level_priority = ["Beginner", "Intermediate", "Advanced"]

    filtered_courses = cv[cv['Course_Name'].str.contains(str1, case=False)]

    # Filter courses by level
    filtered_courses = filtered_courses[filtered_courses['Level'].isin(level_priority)]

    # Sort courses by level priority
    filtered_courses = filtered_courses.sort_values(by='Level', key=lambda x: x.map(level_priority.index))

    for index, row in filtered_courses.iterrows():
        print("Course Name:", row["Course_Name"])
        print("Level:", row["Level"])
        print("Platform:", row["platform"])
        print("Rating:", row["rating"])
        print()  # Print an empty line"""

# Example call to the function (without specifying level_priority)

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

    return recommended_courses
# Example call to the function
fun("sql")

def fun(domain, level, language):
    # Filter courses containing the search string and with the specified level
    filtered_courses = cv[(cv['tags'].str.contains(domain, case=False) | cv['Course_Name'].str.contains(domain, case=False)) &
                          (cv['tags'].str.contains(language, case=False) | cv['Course_Name'].str.contains(language, case=False)) &
                          (cv['Level'].isin([level, 'Advanced']) if level == 'Beginner' else
                           cv['Level'].isin(['Intermediate', 'Advanced']) if level == 'Intermediate' else
                           cv['Level'].isin(['Advanced']))]

    # Sort courses based on rating
    filtered_courses = filtered_courses.sort_values(by='rating', ascending=False)

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

    return recommended_courses

# Example usage:
recommended_courses = fun('python', 'Beginner', 'web development')
print(recommended_courses)

# Save the result into a pickle file
import pickle
with open('recommend_courses.pkl', 'wb') as f:
    pickle.dump(fun, f)

import pickle