import React from 'react';

const Form = () => {
  return (
    <form action="telegram.php" method="POST">
      <div className="form-group">
        <input
          type="text"
          className="form-control"
          name="name"
          placeholder="Enter your name"
        />
      </div>

      <div className="form-group">
        <input
          type="tel"
          className="form-control"
          name="phone"
          placeholder="Enter your phone"
        />
      </div>

      <div className="form-group">
        <input
          type="email"
          className="form-control"
          name="email"
          placeholder="Enter your email"
        />
      </div>

      <div className="form-group">
        <textarea
          // className="form-control"
          name="msg"
          placeholder="Enter your message"
        />
      </div>

      <button type="submit">Send Form</button>
    </form>
  );
};

export default Form;
