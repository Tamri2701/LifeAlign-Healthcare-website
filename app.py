from flask import Flask, request, jsonify
from flask_cors import CORS

app = Flask(__name__)
CORS(app)  # Enable CORS for cross-origin requests

# Simple knowledge base for predefined responses
FIRST_AID_GUIDE = {
    "burn": "For burns, cool the burn under cool running water for at least 10 minutes. Do not apply ice. Cover the burn with a sterile, non-adhesive bandage.",
    "i had a cut": "For cuts, apply direct pressure with a clean cloth to stop the bleeding. Clean the wound with water, apply an antiseptic, and cover with a bandage.",
    "choking": "If someone is choking, ask if they can speak. If not, perform abdominal thrusts (Heimlich maneuver). Call emergency services if the object does not dislodge.",
    "sprain": "For a sprain, use the RICE method: Rest, Ice, Compression, and Elevation. Avoid putting weight on the injured area.",
    "fainting": "If someone faints, lay them down and elevate their legs. Check their breathing and ensure they have fresh air. If they do not regain consciousness quickly, call emergency services."
}

GREETING_RESPONSES = [
    "Hello! I am your health chatbot. How can I assist you today?",
    "Hi there! What can I do for you?",
    "Greetings! Feel free to ask for first aid advice."
]

@app.route('/get_advice', methods=['POST'])
def get_advice():
    data = request.json
    situation = data.get("situation", "").lower()

    # Rule-based responses for first-aid situations
    if situation in FIRST_AID_GUIDE:
        return jsonify({"response": FIRST_AID_GUIDE[situation]})
    
    # Fallback response
    return jsonify({"response": "I'm sorry, I don't have specific advice for that situation."})

@app.route('/greet', methods=['GET'])
def greet():
    import random
    return jsonify({"response": random.choice(GREETING_RESPONSES)})

if __name__ == "__main__":
    app.run(host="127.0.0.1", port=5000)  # Set to run on localhost
