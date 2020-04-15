// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DescribeEdgeClusterAttachScriptsBody extends TeaModel {
    @NameInMap("options")
    @Validation(required = true)
    public DescribeEdgeClusterAttachScriptsBodyOptions options;

    public static DescribeEdgeClusterAttachScriptsBody build(java.util.Map<String, ?> map) throws Exception {
        DescribeEdgeClusterAttachScriptsBody self = new DescribeEdgeClusterAttachScriptsBody();
        return TeaModel.build(map, self);
    }

    public static class DescribeEdgeClusterAttachScriptsBodyOptions extends TeaModel {
        @NameInMap("enableIptables")
        public Boolean enableIptables;

        @NameInMap("flannelIface")
        public String flannelIface;

        @NameInMap("gpuVersion")
        public String gpuVersion;

        @NameInMap("manageRuntime")
        public Boolean manageRuntime;

        @NameInMap("nodeName")
        public String nodeName;

        @NameInMap("nodeNamePrefix")
        public String nodeNamePrefix;

        @NameInMap("nodeNameStrategy")
        public Boolean nodeNameStrategy;

        public static DescribeEdgeClusterAttachScriptsBodyOptions build(java.util.Map<String, ?> map) throws Exception {
            DescribeEdgeClusterAttachScriptsBodyOptions self = new DescribeEdgeClusterAttachScriptsBodyOptions();
            return TeaModel.build(map, self);
        }

    }

}
