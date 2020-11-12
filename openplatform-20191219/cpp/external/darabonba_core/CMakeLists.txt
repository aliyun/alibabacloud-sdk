find_package(darabonba_core QUIET)

if(darabonba_core_FOUND)
  message(STATUS "Found darabonba_core version ${darabonba_core_VERSION}")
else()
  message(STATUS "darabonba_core could not be located, Building darabonba_core instead.")
  include(FetchContent)

  FetchContent_Declare(
    _darabonba_core
    GIT_REPOSITORY https://github.com/aliyun/tea-cpp.git
    GIT_TAG master
    CMAKE_ARGS
      -DENABLE_UNIT_TESTS:BOOL="0")

  FetchContent_GetProperties(_darabonba_core)
  if(NOT _darabonba_core_POPULATED)
    FetchContent_Populate(_darabonba_core)
    message(STATUS "Added darabonba_core source : ${_darabonba_core_SOURCE_DIR}")
    message(STATUS "Added darabonba_core binary : ${_darabonba_core_BINARY_DIR}")
    add_subdirectory(
      ${_darabonba_core_SOURCE_DIR}
      ${_darabonba_core_BINARY_DIR}
    )
  endif()
  target_include_directories(alibabacloud_open_platform_20191219 PRIVATE "${_darabonba_core_SOURCE_DIR}/include")
endif()
