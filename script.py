from openai import OpenAI
import sys

client = OpenAI(api_key="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")

# Set your OpenAI API key


# Define the English text to translate
if len(sys.argv) > 1 : 
    english_text = sys.argv[1]
    print(english_text)
    # Define the prompt including the English text
    prompt = f"Translate the following English text to French: {english_text}"

    # Call the OpenAI API
    completion = client.completions.create(model="text-davinci-003",
    prompt=prompt,
    max_tokens=50)

    # Extract the generated text from the OpenAI API response
    translated_text = completion.choices[0].text.strip()

    # Print the generated text
    print(translated_text)
else:
    print("Error!!")