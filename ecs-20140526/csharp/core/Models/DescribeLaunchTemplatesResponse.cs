// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeLaunchTemplatesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("LaunchTemplateSets")]
        [Validation(Required=true)]
        public DescribeLaunchTemplatesResponseLaunchTemplateSets LaunchTemplateSets { get; set; }
        public class DescribeLaunchTemplatesResponseLaunchTemplateSets : TeaModel {
            [NameInMap("LaunchTemplateSet")]
            [Validation(Required=true)]
            public List<DescribeLaunchTemplatesResponseLaunchTemplateSetsLaunchTemplateSet> LaunchTemplateSet { get; set; }
            public class DescribeLaunchTemplatesResponseLaunchTemplateSetsLaunchTemplateSet : TeaModel {
                    public string CreateTime { get; set; }
                    public string ModifiedTime { get; set; }
                    public string LaunchTemplateId { get; set; }
                    public string LaunchTemplateName { get; set; }
                    public long DefaultVersionNumber { get; set; }
                    public long LatestVersionNumber { get; set; }
                    public string CreatedBy { get; set; }
                    public string ResourceGroupId { get; set; }
                    public DescribeLaunchTemplatesResponseLaunchTemplateSetsLaunchTemplateSetTags Tags { get; set; }
                    public class DescribeLaunchTemplatesResponseLaunchTemplateSetsLaunchTemplateSetTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeLaunchTemplatesResponseLaunchTemplateSetsLaunchTemplateSetTagsTag> Tag { get; set; }
                        public class DescribeLaunchTemplatesResponseLaunchTemplateSetsLaunchTemplateSetTagsTag : TeaModel {
                            [NameInMap("TagKey")]
                            [Validation(Required=true)]
                            public string TagKey { get; set; }

                            [NameInMap("TagValue")]
                            [Validation(Required=true)]
                            public string TagValue { get; set; }

                        }

                    }
            }
        };

    }

}
