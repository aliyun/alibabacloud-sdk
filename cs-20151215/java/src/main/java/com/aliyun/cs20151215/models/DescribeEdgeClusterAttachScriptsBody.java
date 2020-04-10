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
        @Validation(required = true)
        public Boolean enableIptables;

        @NameInMap("flannelIface")
        @Validation(required = true)
        public String flannelIface;

        @NameInMap("gpuVersion")
        @Validation(required = true)
        public String gpuVersion;

        @NameInMap("manageRuntime")
        @Validation(required = true)
        public Boolean manageRuntime;

        @NameInMap("nodeName")
        @Validation(required = true)
        public String nodeName;

        @NameInMap("nodeNamePrefix")
        @Validation(required = true)
        public String nodeNamePrefix;

        @NameInMap("nodeNameStrategy")
        @Validation(required = true)
        public Boolean nodeNameStrategy;

        public static DescribeEdgeClusterAttachScriptsBodyOptions build(java.util.Map<String, ?> map) throws Exception {
            DescribeEdgeClusterAttachScriptsBodyOptions self = new DescribeEdgeClusterAttachScriptsBodyOptions();
            return TeaModel.build(map, self);
        }

    }

}
