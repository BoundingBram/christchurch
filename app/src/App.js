import React from "react";
import { Tab, Tabs, TabList, TabPanel } from "react-tabs";
import "./App.css";

class App extends React.Component {
  render() {
    return (
      <div className="app">
        <h1>Christchurch</h1>
        <Tabs>
          <TabList>
            <Tab>Local news</Tab>
            <Tab>Local business</Tab>
            <Tab>Local gems</Tab>
          </TabList>
          <TabPanel>
            <h1>A Test</h1>
          </TabPanel>
          <TabPanel>
            <h1>A Twost</h1>
          </TabPanel>
          <TabPanel>
            <h1>A Twitzel</h1>
          </TabPanel>
        </Tabs>
      </div>
    );
  }
}

export default App;
