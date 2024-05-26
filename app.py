from flask import Flask, render_template, request, redirect, url_for, flash, jsonify # type: ignore
import random
import string

app = Flask(__name__)
app.secret_key = 'supersecretkey'

# In-memory data storage for simplicity (replace with a database in production)
users = {}
admins = {'Moon Cher': 'adminpassword'}
user_tools_access = {}

# Mock antivirus scan function (replace with actual antivirus integration)
def antivirus_scan(file_path):
    # Simulate antivirus scan (return False if no threats found)
    return False

# Routes
@app.route('/')
def index():
    return render_template('index.html')

@app.route('/login', methods=['POST'])
def login():
    username = request.form['username']
    password = request.form['password']
    if username in admins and admins[username] == password:
        flash('Admin logged in successfully!', 'success')
        return redirect(url_for('admin_dashboard'))
    else:
        flash('Invalid credentials', 'danger')
        return redirect(url_for('index'))

@app.route('/admin_dashboard')
def admin_dashboard():
    return render_template('admin_dashboard.html')

@app.route('/generate_password', methods=['POST'])
def generate_password():
    length = int(request.form['length'])
    password = ''.join(random.choices(string.ascii_letters + string.digits, k=length))
    return jsonify({'password': password})

@app.route('/use_tool', methods=['POST'])
def use_tool():
    tool = request.form['tool']
    username = request.form['username']
    if username in user_tools_access:
        user_tools_access[username].append(tool)
    else:
        user_tools_access[username] = [tool]
    return jsonify({'status': 'success', 'tool': tool})

@app.route('/upload', methods=['POST'])
def upload():
    file = request.files['file']
    if file:
        file_path = f"./uploads/{file.filename}"
        file.save(file_path)
        if antivirus_scan(file_path):
            return jsonify({'status': 'error', 'message': 'Malware detected!'})
        return jsonify({'status': 'success', 'message': 'File uploaded successfully!'})
    return jsonify({'status': 'error', 'message': 'No file uploaded'})

if __name__ == '__main__':
    app.run(debug=True)
