from ave import AVE, config
import os


def run():
    ave = AVE()
    ave.load_games(config.games_folder)
    ave.start()
