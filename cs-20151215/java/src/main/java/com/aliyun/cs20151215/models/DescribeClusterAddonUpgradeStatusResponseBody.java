// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DescribeClusterAddonUpgradeStatusResponseBody extends TeaModel {
    @NameInMap("ComponentId")
    @Validation(required = true)
    public DescribeClusterAddonUpgradeStatusResponseBodyComponentId componentId;

    public static DescribeClusterAddonUpgradeStatusResponseBody build(java.util.Map<String, ?> map) throws Exception {
        DescribeClusterAddonUpgradeStatusResponseBody self = new DescribeClusterAddonUpgradeStatusResponseBody();
        return TeaModel.build(map, self);
    }

    public static class DescribeClusterAddonUpgradeStatusResponseBodyComponentIdAddonInfo extends TeaModel {
        @NameInMap("component_name")
        @Validation(required = true)
        public String componentName;

        @NameInMap("ready_to_upgrade")
        @Validation(required = true)
        public String readyToUpgrade;

        @NameInMap("message")
        @Validation(required = true)
        public String message;

        @NameInMap("version")
        @Validation(required = true)
        public String version;

        @NameInMap("yaml")
        @Validation(required = true)
        public String yaml;

        public static DescribeClusterAddonUpgradeStatusResponseBodyComponentIdAddonInfo build(java.util.Map<String, ?> map) throws Exception {
            DescribeClusterAddonUpgradeStatusResponseBodyComponentIdAddonInfo self = new DescribeClusterAddonUpgradeStatusResponseBodyComponentIdAddonInfo();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeClusterAddonUpgradeStatusResponseBodyComponentIdTasks extends TeaModel {
        @NameInMap("finished_at")
        @Validation(required = true)
        public String finishedAt;

        @NameInMap("master_url")
        @Validation(required = true)
        public String masterUrl;

        @NameInMap("created_at")
        @Validation(required = true)
        public String createdAt;

        @NameInMap("status")
        @Validation(required = true)
        public String status;

        public static DescribeClusterAddonUpgradeStatusResponseBodyComponentIdTasks build(java.util.Map<String, ?> map) throws Exception {
            DescribeClusterAddonUpgradeStatusResponseBodyComponentIdTasks self = new DescribeClusterAddonUpgradeStatusResponseBodyComponentIdTasks();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeClusterAddonUpgradeStatusResponseBodyComponentId extends TeaModel {
        @NameInMap("template")
        @Validation(required = true)
        public String template;

        @NameInMap("can_upgrade")
        @Validation(required = true)
        public Boolean canUpgrade;

        @NameInMap("changed")
        @Validation(required = true)
        public String changed;

        @NameInMap("addon_info")
        @Validation(required = true)
        public DescribeClusterAddonUpgradeStatusResponseBodyComponentIdAddonInfo addonInfo;

        @NameInMap("tasks")
        @Validation(required = true)
        public DescribeClusterAddonUpgradeStatusResponseBodyComponentIdTasks tasks;

        public static DescribeClusterAddonUpgradeStatusResponseBodyComponentId build(java.util.Map<String, ?> map) throws Exception {
            DescribeClusterAddonUpgradeStatusResponseBodyComponentId self = new DescribeClusterAddonUpgradeStatusResponseBodyComponentId();
            return TeaModel.build(map, self);
        }

    }

}
