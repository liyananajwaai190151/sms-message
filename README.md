# sms-message

# SMS Queueing Application

This is a simple Laravel application that offers queueing of SMS messages.

## Setup Steps:

1. Clone the repository or download the files.
2. Configure your MySQL database connection in the `.env` file.
3. Run the database migrations: `php artisan migrate`.

## Usage:

1. **Insert an SMS Message:**
   - Endpoint: `/insert-message/{id?}`
   - Method: GET (to display the form), POST (to submit the form)
   - Parameters: 
     - `id`: (Optional) The ID of the message to update. If provided, the form will be pre-filled with the message data.

2. **Read an SMS Message from Storage and Return in JSON Format (FIFO):**
   - Endpoint: `/read-message`
   - Method: GET
   - Returns: All SMS message in JSON format.

3. **Get the Total Number of Messages in Storage:**
   - Endpoint: `/total-messages`
   - Method: GET
   - Returns: Total number of SMS messages in JSON format.

4. **Get All SMS Messages in Storage in JSON Format:**
   - Endpoint: `/all-messages`
   - Method: GET
   - Returns: All SMS messages in JSON format.
