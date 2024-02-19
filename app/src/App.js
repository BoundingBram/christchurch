import React from "react";

class Dashboard extends React.Component {
  render() {
    return (
      <div className="dashboard">
        <h1>Welcome to Your Dashboard</h1>
        <div className="widgets">
          <div className="widget">
            <h2>Widget 1</h2>
            <p>This is the content of Widget 1</p>
          </div>
          <div className="widget">
            <h2>Widget 2</h2>
            <p>This is the content of Widget 2</p>
          </div>
          <div className="widget">
            <h2>Widget 3</h2>
            <p>This is the content of Widget 3</p>
          </div>
        </div>
      </div>
    );
  }
}

export default Dashboard;
