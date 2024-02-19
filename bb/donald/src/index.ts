// Import the Database class from Cloudflare D1
import { Database } from '@cloudflare/d1';

// Define the endpoint handler function
export async function handleRequest(request) {
  try {
    // Connect to the database using the binding defined in wrangler.toml
    const env = {
      DB: new Database('DB'), // Provide the binding name here
    };

    // Query the database to fetch client data
    const { results } = await env.DB.prepare("SELECT * FROM clients").all();

    // Return the fetched data as JSON response
    return new Response(JSON.stringify(results), {
      headers: { "Content-Type": "application/json" },
    });
  } catch (error) {
    // Return error response if there's an exception
    return new Response("Internal Server Error", { status: 500 });
  }
}

// Add event listener to handle incoming requests
addEventListener("fetch", (event) => {
  event.respondWith(handleRequest(event.request));
});
