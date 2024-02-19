import React, { useState, useEffect } from "react";

const App = () => {
  const [message, setMessage] = useState("");
  const [error, setError] = useState("");

  useEffect(() => {
    fetchDataFromWorker();
  }, []);

  const fetchDataFromWorker = async () => {
    try {
      const response = await fetch("https://dataman.kiaora.workers.dev/");
      if (!response.ok) {
        throw new Error("Failed to fetch data");
      }
      const data = await response.json();
      setMessage(data.message);
    } catch (error) {
      console.error("Error fetching data:", error);
      setError("Failed to fetch data from Cloudflare Worker");
    }
  };

  return (
    <div>
      <h1>Hello from React!</h1>
      {error ? (
        <p>Error: {error}</p>
      ) : (
        <p>Message from Cloudflare Worker: {message}</p>
      )}
    </div>
  );
};

export default App;
