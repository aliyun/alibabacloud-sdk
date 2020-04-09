// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeAddonsResponseBody : TeaModel {
        [NameInMap("ComponentGroups")]
        [Validation(Required=true)]
        public List<DescribeAddonsResponseBodyComponentGroups> ComponentGroups { get; set; }
        public class DescribeAddonsResponseBodyComponentGroups : TeaModel {
            [NameInMap("group_name")]
            [Validation(Required=true)]
            public string GroupName { get; set; }

            [NameInMap("items")]
            [Validation(Required=true)]
            public List<DescribeAddonsResponseBodyComponentGroupsItems> Items { get; set; }
            public class DescribeAddonsResponseBodyComponentGroupsItems : TeaModel {
                [NameInMap("name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("config")]
                [Validation(Required=true)]
                public string Config { get; set; }

                [NameInMap("required")]
                [Validation(Required=true)]
                public string Required { get; set; }

                [NameInMap("disabled")]
                [Validation(Required=true)]
                public bool? Disabled { get; set; }

                [NameInMap("version")]
                [Validation(Required=true)]
                public string Version { get; set; }

            }

            [NameInMap("default")]
            [Validation(Required=true)]
            public List<string> Default { get; set; }

        }

        [NameInMap("StandardComponents")]
        [Validation(Required=true)]
        public DescribeAddonsResponseBodyStandardComponents StandardComponents { get; set; }
        public class DescribeAddonsResponseBodyStandardComponents : TeaModel {
            [NameInMap("addon_name")]
            [Validation(Required=true)]
            public DescribeAddonsResponseBodyStandardComponentsAddonName AddonName { get; set; }
            public class DescribeAddonsResponseBodyStandardComponentsAddonName : TeaModel {
                [NameInMap("name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("config")]
                [Validation(Required=true)]
                public string Config { get; set; }

                [NameInMap("required")]
                [Validation(Required=true)]
                public string Required { get; set; }

                [NameInMap("disabled")]
                [Validation(Required=true)]
                public bool? Disabled { get; set; }

                [NameInMap("version")]
                [Validation(Required=true)]
                public string Version { get; set; }

            }
        };

    }

}
