import React, { Component } from 'react';
import './App.css';

class TodoItem extends Component {

  constructor(props) {
    super(props);
    this.state = {
      finalizada: props.item.completed
    }
  }

  getClass() {
    if (!this.state.finalizada) {
      return 'todo-item';
    } else {
      return 'todo-item completed';
    }
  }

  toggleCompleted() {
    this.setState( (state, props) => ({
        finalizada: !state.finalizada
    }));
  }

  render() {
      console.log('render')
      return (
        <li onClick={ () => this.toggleCompleted() } className={ this.getClass() }>{ this.props.item.title }</li>
      );
  }
}

export default TodoItem;
