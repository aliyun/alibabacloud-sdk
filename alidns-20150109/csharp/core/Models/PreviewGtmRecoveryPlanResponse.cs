// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class PreviewGtmRecoveryPlanResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalItems")]
        [Validation(Required=true)]
        public int? TotalItems { get; set; }

        [NameInMap("TotalPages")]
        [Validation(Required=true)]
        public int? TotalPages { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("Previews")]
        [Validation(Required=true)]
        public PreviewGtmRecoveryPlanResponsePreviews Previews { get; set; }
        public class PreviewGtmRecoveryPlanResponsePreviews : TeaModel {
            [NameInMap("Preview")]
            [Validation(Required=true)]
            public List<PreviewGtmRecoveryPlanResponsePreviewsPreview> Preview { get; set; }
            public class PreviewGtmRecoveryPlanResponsePreviewsPreview : TeaModel {
                    public string InstanceId { get; set; }
                    public string Name { get; set; }
                    public string UserDomainName { get; set; }
                    public PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos SwitchInfos { get; set; }
                    public class PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos : TeaModel {
                        [NameInMap("SwitchInfo")]
                        [Validation(Required=true)]
                        public List<PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo> SwitchInfo { get; set; }
                        public class PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo : TeaModel {
                            [NameInMap("StrategyName")]
                            [Validation(Required=true)]
                            public string StrategyName { get; set; }

                            [NameInMap("Content")]
                            [Validation(Required=true)]
                            public string Content { get; set; }

                        }

                    }
            }
        };

    }

}
